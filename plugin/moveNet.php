<?php

namespace MiraiTravel\Plugins\moveNet\V0_1_0;

use MiraiTravel\MessageChain\MessageChain;
use MiraiTravel\Plugins\Plugin;

use function MiraiTravel\HttpAdapter\curl_get;

class moveNet extends Plugin
{
    const INFORMATION = [
        "information" => "调用movenet进行姿态估计"
    ];

    public $userVmid;
    public $path = false;

    function init()
    {
    }

    function config($config)
    {
        $this->path = $config['path'] ?? "/www/MoveNet";
    }

    function webhook_group_message($webhookMessage)
    {
        $reciveChain = new MessageChain;
        $reciveChain->set_message_chain($webhookMessage['messageChain']);
        $reciveText = $reciveChain->get_all_plain(true);
        if ($this->get_command($reciveText) === "姿态估计") {
            $reciveImage = $reciveChain->get_all_img(true);
            if ($reciveImage[0] ?? false) {
                $url = $reciveImage[0];
                $this->_qqBot->reply_message("读取图片信息中");
                $downloadPath = $this->path . "/inputImage";
                $downloadFile = $this->rand(10) . ".jpg";
                $this->download($url, $downloadPath, $downloadFile, true);
                $this->_qqBot->reply_message("下载完成 正在提取特征点。");
                $moveNet = curl_get("http://127.0.0.1:5000?imagePath=" . $downloadPath . "/" . $downloadFile);
                $this->_qqBot->reply_message("提取完成,正在上床。");
                $replyMessageChain = new MessageChain;
                $replyMessageChain->push_plain("提取可视化结果如下");
                $outputPath = $this->path . "/outputImage";
                $replyMessageChain = $replyMessageChain->get_message_chain();
                $replyMessageChain[] = ["path" => $outputPath . "/" . $downloadFile, 'type' => "Image"];
                $this->_qqBot->reply_message($replyMessageChain, true);
            } else {
                $this->_qqBot->reply_message("请附带图片");
            }
        }
    }

    function rand($len)
    {
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';
        $string = time();
        for (; $len >= 1; $len--) {
            $position = rand() % strlen($chars);
            $position2 = rand() % strlen($string);
            $string = substr_replace($string, substr($chars, $position, 1), $position2, 0);
        }
        return $string;
    }

    function download($url, $save_dir = '', $filename = '', $type = 0)
    {
        // 路径是否为空
        if (trim($url) == '') {
            return array('file_name' => '', 'save_path' => '', 'error' => 1);
        }
        //保存到
        if (trim($save_dir) == '') {
            $save_dir = './img';
        }
        if (trim($filename) == '') { //保存文件名
            $ext = strrchr($url, '.');
            //判断后缀是否合法
            if ($ext != '.gif' && $ext != '.jpeg') {
                return array('file_name' => '', 'save_path' => '', 'error' => 3);
            }
            //生成文件名字
            $filename = time() . $ext;
        }
        if (0 !== strrpos($save_dir, '/')) {
            $save_dir .= '/';
        }
        //创建保存目录
        if (!file_exists($save_dir) && !mkdir($save_dir, 0777, true)) {
            return array('file_name' => '', 'save_path' => '', 'error' => 5);
        }
        //获取远程文件所采用的方法
        if ($type) {
            $ch = curl_init();
            $timeout = 5;
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
            $img = curl_exec($ch);
            curl_close($ch);
        } else {
            ob_start();
            readfile($url);
            $img = ob_get_contents();
            ob_end_clean();
        }
        //$size=strlen($img);
        //文件大小
        $fp2 = @fopen($save_dir . $filename, 'a');
        fwrite($fp2, $img);
        fclose($fp2);
        chmod($save_dir . $filename, 0777);
        unset($img, $url);
        return array('file_name' => $filename, 'save_path' => $save_dir . $filename, 'error' => 0);
    }

    function get_command($message)
    {
        $message = $this->cut_command($message, 0);
        $message = trim($message);
        return strtolower($message);
    }

    function cut_command($msg, $num = false)
    {
        $msg = preg_split("/[\s,]+/", $msg);
        if ($num === false || $num < 0) {
            return $msg;
        } else {
            return $msg[$num];
        }
    }
}
