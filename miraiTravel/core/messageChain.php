<?php

namespace MiraiTravel\MessageChain;


class MessageChain
{
    private $messageChain;

    function __construct()
    {
        $this->messageChain = array();
    }

    /**
     * 获取构建好的messageChain
     * @return array messageChain
     */
    function get_message_chain()
    {
        return $this->messageChain;
    }

    /**
     * 设置messageChain
     */
    function set_message_chain($messageChain)
    {
        $this->messageChain = $messageChain;
        return $this->messageChain;
    }

    /**
     * 清除messageChain
     */
    function clean()
    {
        $this->messageChain = [];
        return [];
    }

    /**
     * 获取消息链中所有的 Plain 消息 
     * @param bool $jointAll 是否把所有的Plain拼接到一个字符串中 
     */
    function get_all_plain($jointAll = false)
    {
        if ($jointAll) {
            $nods = "";
        } else {
            $nods = array();
        }

        if (empty($this->messageChain)) {
            return $nods;
        }

        foreach ($this->messageChain as $node) {
            if ($node['type'] === "Plain") {
                if ($jointAll) {
                    $nods = $nods . $node['text'];
                } else {
                    $nods[] = $node;
                }
            }
        }

        return $nods;
    }

    /**
     * 获取消息链中所有的 At消息 
     * @param bool $getManber 是否只获取账号 
     * 
     */
    function get_all_at($getManber = false)
    {
        $nods = array();

        if (empty($this->messageChain)) {
            return $nods;
        }
        foreach ($this->messageChain as $node) {
            if ($node['type'] === "At") {
                if ($getManber) {
                    $nods[] = $node['target'];
                } else {
                    $nods[] = $node;
                }
            }
        }
        return $nods;
    }

    /**
     * 获取消息链中所有的 Plain 消息 
     * @param bool $getPath 是否只获取图片的下载链接
     * 
     */
    function get_all_img($getPath = false)
    {
        $nods = array();

        if (empty($this->messageChain)) {
            return $nods;
        }
        foreach ($this->messageChain as $node) {
            if ($node['type'] === "Image") {
                if ($getPath) {
                    $nods[] = $node['url'];
                } else {
                    $nods[] = $node;
                }
            }
        }
        return $nods;
    }

    /**
     * push_plain
     * 添加文字
     * @param string $plain 文字消息
     */
    function push_plain($plain)
    {
        $node = array();
        $node['type'] = "Plain";
        $node['text'] = $plain;
        $this->messageChain[] = $node;
        return $this->messageChain;
    }

    /**
     * push_face 
     * 添加QQ表情
     * @param int       $faceId QQ表情编号，可选，优先高于name
     * @param string    $name   QQ表情拼音，可选         
     */
    function push_face($faceId, $name = null)
    {
        $node = array();
        $node['type'] = "Face";
        if (!empty($faceId)) {
            $node['faceId'] = $faceId;
        } elseif (!empty($name)) {
            $node['name'] = $name;
        } else return $this->messageChain;

        $this->messageChain[] = $node;
        return $this->messageChain;
    }

    /**
     * push_at 
     * 添加群at
     * @param int       $target     群员QQ号
     * @param string    $display    At时显示的文字，发送消息时无效，自动使用群名片
     */
    function push_at($target, $display = null)
    {
        $node = array();
        $node['type'] = "At";
        $node['target'] = $target;
        $this->messageChain[] = $node;
        return $this->messageChain;
    }

    /**
     * push_at_all
     * 添加at所有人
     */
    function push_at_all()
    {
        $node = array();
        $node['type'] = "AtAll";
        $this->messageChain[] = $node;
        return $this->messageChain;
    }

    /**
     * push_img
     * 添加图片
     * @param string $url 图片链接
     */
    function push_img($url)
    {
        $node = array();
        $node['type'] = "Image";
        $node['url'] = $url;
        $this->messageChain[] = $node;
        return $this->messageChain;
    }
}
