# Details

Date : 2023-03-05 16:04:49

Directory f:\\Project\\工作文件夹\\MiraiTravel-plugin-moveNet

Total : 81 files,  5412 codes, 1694 comments, 1024 blanks, all 8130 lines

[Summary](results.md) / Details / [Diff Summary](diff.md) / [Diff Details](diff-details.md)

## Files
| filename | language | code | comment | blank | total |
| :--- | :--- | ---: | ---: | ---: | ---: |
| [README.md](/README.md) | Markdown | 7 | 0 | 4 | 11 |
| [config.json](/config.json) | JSON | 11 | 0 | 0 | 11 |
| [miraiTravel/CODE_OF_CONDUCT.md](/miraiTravel/CODE_OF_CONDUCT.md) | Markdown | 93 | 0 | 36 | 129 |
| [miraiTravel/MiraiTravel.php](/miraiTravel/MiraiTravel.php) | PHP | 5 | 4 | 6 | 15 |
| [miraiTravel/README.md](/miraiTravel/README.md) | Markdown | 67 | 1 | 23 | 91 |
| [miraiTravel/components/easyMirai/V0.1.1/easyMirai.php](/miraiTravel/components/easyMirai/V0.1.1/easyMirai.php) | PHP | 88 | 24 | 11 | 123 |
| [miraiTravel/components/webhook/V0.1.1/webhook.php](/miraiTravel/components/webhook/V0.1.1/webhook.php) | PHP | 48 | 19 | 6 | 73 |
| [miraiTravel/core/component.php](/miraiTravel/core/component.php) | PHP | 39 | 20 | 18 | 77 |
| [miraiTravel/core/componentSystem.php](/miraiTravel/core/componentSystem.php) | PHP | 40 | 9 | 11 | 60 |
| [miraiTravel/core/dataSystem.php](/miraiTravel/core/dataSystem.php) | PHP | 112 | 25 | 12 | 149 |
| [miraiTravel/core/httpAdapter.php](/miraiTravel/core/httpAdapter.php) | PHP | 92 | 10 | 11 | 113 |
| [miraiTravel/core/logSystem.php](/miraiTravel/core/logSystem.php) | PHP | 106 | 27 | 9 | 142 |
| [miraiTravel/core/messageChain.php](/miraiTravel/core/messageChain.php) | PHP | 122 | 50 | 22 | 194 |
| [miraiTravel/core/miraiApiHttp.php](/miraiTravel/core/miraiApiHttp.php) | PHP | 268 | 165 | 49 | 482 |
| [miraiTravel/core/miraiTravel.php](/miraiTravel/core/miraiTravel.php) | PHP | 209 | 11 | 25 | 245 |
| [miraiTravel/core/miraiTravelSoftware/config.php](/miraiTravel/core/miraiTravelSoftware/config.php) | PHP | 121 | 3 | 11 | 135 |
| [miraiTravel/core/miraiTravelSoftware/help.php](/miraiTravel/core/miraiTravelSoftware/help.php) | PHP | 22 | 3 | 7 | 32 |
| [miraiTravel/core/miraiTravelSoftware/plugins.php](/miraiTravel/core/miraiTravelSoftware/plugins.php) | PHP | 55 | 3 | 8 | 66 |
| [miraiTravel/core/miraiTravelSoftware/qqBot.php](/miraiTravel/core/miraiTravelSoftware/qqBot.php) | PHP | 95 | 3 | 9 | 107 |
| [miraiTravel/core/miraiTravelSoftware/stay.php](/miraiTravel/core/miraiTravelSoftware/stay.php) | PHP | 53 | 3 | 8 | 64 |
| [miraiTravel/core/plugin.php](/miraiTravel/core/plugin.php) | PHP | 23 | 12 | 10 | 45 |
| [miraiTravel/core/pluginSystem.php](/miraiTravel/core/pluginSystem.php) | PHP | 87 | 35 | 25 | 147 |
| [miraiTravel/core/qqObj.php](/miraiTravel/core/qqObj.php) | PHP | 444 | 150 | 56 | 650 |
| [miraiTravel/core/scriptSystem.php](/miraiTravel/core/scriptSystem.php) | PHP | 44 | 13 | 9 | 66 |
| [miraiTravel/core/webhookAdapter.php](/miraiTravel/core/webhookAdapter.php) | PHP | 32 | 17 | 9 | 58 |
| [miraiTravel/docs/Component.md](/miraiTravel/docs/Component.md) | Markdown | 6 | 0 | 8 | 14 |
| [miraiTravel/docs/MiraiTravel.md](/miraiTravel/docs/MiraiTravel.md) | Markdown | 29 | 0 | 10 | 39 |
| [miraiTravel/docs/Plugin.md](/miraiTravel/docs/Plugin.md) | Markdown | 4 | 0 | 4 | 8 |
| [miraiTravel/docs/QQBot.md](/miraiTravel/docs/QQBot.md) | Markdown | 55 | 0 | 15 | 70 |
| [miraiTravel/docs/QQBot/QQBot手册.md](/miraiTravel/docs/QQBot/QQBot%E6%89%8B%E5%86%8C.md) | Markdown | 47 | 0 | 15 | 62 |
| [miraiTravel/docs/System.md](/miraiTravel/docs/System.md) | Markdown | 8 | 0 | 4 | 12 |
| [miraiTravel/docs/System/开放对象.md](/miraiTravel/docs/System/%E5%BC%80%E6%94%BE%E5%AF%B9%E8%B1%A1.md) | Markdown | 3 | 0 | 5 | 8 |
| [miraiTravel/loadMiraiTravel.php](/miraiTravel/loadMiraiTravel.php) | PHP | 11 | 3 | 4 | 18 |
| [miraiTravel/logs/Script/2771717841/script.log](/miraiTravel/logs/Script/2771717841/script.log) | Log | 102 | 0 | 0 | 102 |
| [miraiTravel/logs/Script/2771717841/sendMessage.log](/miraiTravel/logs/Script/2771717841/sendMessage.log) | Log | 31 | 0 | 26 | 57 |
| [miraiTravel/logs/Script/2771717841/webhook.log](/miraiTravel/logs/Script/2771717841/webhook.log) | Log | 124 | 0 | 0 | 124 |
| [miraiTravel/logs/httpAdapter.log](/miraiTravel/logs/httpAdapter.log) | Log | 90 | 0 | 0 | 90 |
| [miraiTravel/logs/miraiApiHttp.log](/miraiTravel/logs/miraiApiHttp.log) | Log | 60 | 0 | 0 | 60 |
| [miraiTravel/logs/miraiTravel.log](/miraiTravel/logs/miraiTravel.log) | Log | 2 | 0 | 0 | 2 |
| [miraiTravel/logs/webhook.log](/miraiTravel/logs/webhook.log) | Log | 56 | 0 | 1 | 57 |
| [miraiTravel/plugins/bilibiliFans/V0.1.0/bilibiliFans.php](/miraiTravel/plugins/bilibiliFans/V0.1.0/bilibiliFans.php) | PHP | 58 | 0 | 12 | 70 |
| [miraiTravel/plugins/bilibiliFans/V0.1.0/config.json](/miraiTravel/plugins/bilibiliFans/V0.1.0/config.json) | JSON | 8 | 0 | 0 | 8 |
| [miraiTravel/plugins/groupManager/V0.1.0/config.json](/miraiTravel/plugins/groupManager/V0.1.0/config.json) | JSON | 10 | 0 | 0 | 10 |
| [miraiTravel/plugins/groupManager/V0.1.0/groupManager.php](/miraiTravel/plugins/groupManager/V0.1.0/groupManager.php) | PHP | 100 | 3 | 15 | 118 |
| [miraiTravel/plugins/runoobC/V0.1.0/README.md](/miraiTravel/plugins/runoobC/V0.1.0/README.md) | Markdown | 5 | 0 | 4 | 9 |
| [miraiTravel/plugins/runoobC/V0.1.0/config.json](/miraiTravel/plugins/runoobC/V0.1.0/config.json) | JSON | 10 | 0 | 0 | 10 |
| [miraiTravel/plugins/runoobC/V0.1.0/runoobC.php](/miraiTravel/plugins/runoobC/V0.1.0/runoobC.php) | PHP | 125 | 0 | 14 | 139 |
| [miraiTravel/script/Q2771717841.php](/miraiTravel/script/Q2771717841.php) | PHP | 25 | 16 | 7 | 48 |
| [miraiTravel/webhook.php](/miraiTravel/webhook.php) | PHP | 65 | 6 | 14 | 85 |
| [otherDepend/MoveNetLite/README.md](/otherDepend/MoveNetLite/README.md) | Markdown | 66 | 0 | 19 | 85 |
| [otherDepend/MoveNetLite/app.py](/otherDepend/MoveNetLite/app.py) | Python | 36 | 3 | 0 | 39 |
| [otherDepend/MoveNetLite/data.py](/otherDepend/MoveNetLite/data.py) | Python | 63 | 36 | 22 | 121 |
| [otherDepend/MoveNetLite/json.json](/otherDepend/MoveNetLite/json.json) | JSON | 123 | 0 | 0 | 123 |
| [otherDepend/MoveNetLite/ml/__init__.py](/otherDepend/MoveNetLite/ml/__init__.py) | Python | 4 | 14 | 2 | 20 |
| [otherDepend/MoveNetLite/ml/classifier.py](/otherDepend/MoveNetLite/ml/classifier.py) | Python | 41 | 49 | 17 | 107 |
| [otherDepend/MoveNetLite/ml/classifier_test.py](/otherDepend/MoveNetLite/ml/classifier_test.py) | Python | 20 | 17 | 10 | 47 |
| [otherDepend/MoveNetLite/ml/movenet.py](/otherDepend/MoveNetLite/ml/movenet.py) | Python | 185 | 131 | 43 | 359 |
| [otherDepend/MoveNetLite/ml/movenet_multipose.py](/otherDepend/MoveNetLite/ml/movenet_multipose.py) | Python | 98 | 68 | 25 | 191 |
| [otherDepend/MoveNetLite/ml/movenet_multipose_test.py](/otherDepend/MoveNetLite/ml/movenet_multipose_test.py) | Python | 50 | 29 | 20 | 99 |
| [otherDepend/MoveNetLite/ml/movenet_test.py](/otherDepend/MoveNetLite/ml/movenet_test.py) | Python | 53 | 27 | 17 | 97 |
| [otherDepend/MoveNetLite/ml/posenet.py](/otherDepend/MoveNetLite/ml/posenet.py) | Python | 62 | 54 | 25 | 141 |
| [otherDepend/MoveNetLite/ml/posenet_test.py](/otherDepend/MoveNetLite/ml/posenet_test.py) | Python | 43 | 25 | 15 | 83 |
| [otherDepend/MoveNetLite/pose_estimation.py](/otherDepend/MoveNetLite/pose_estimation.py) | Python | 133 | 61 | 25 | 219 |
| [otherDepend/MoveNetLite/requirements.txt](/otherDepend/MoveNetLite/requirements.txt) | pip requirements | 5 | 0 | 1 | 6 |
| [otherDepend/MoveNetLite/setup.sh](/otherDepend/MoveNetLite/setup.sh) | Shell Script | 38 | 3 | 9 | 50 |
| [otherDepend/MoveNetLite/test.py](/otherDepend/MoveNetLite/test.py) | Python | 35 | 4 | 11 | 50 |
| [otherDepend/MoveNetLite/tracker/__init__.py](/otherDepend/MoveNetLite/tracker/__init__.py) | Python | 6 | 14 | 2 | 22 |
| [otherDepend/MoveNetLite/tracker/bounding_box_tracker.py](/otherDepend/MoveNetLite/tracker/bounding_box_tracker.py) | Python | 34 | 37 | 11 | 82 |
| [otherDepend/MoveNetLite/tracker/bounding_box_tracker_test.py](/otherDepend/MoveNetLite/tracker/bounding_box_tracker_test.py) | Python | 87 | 24 | 16 | 127 |
| [otherDepend/MoveNetLite/tracker/config.py](/otherDepend/MoveNetLite/tracker/config.py) | Python | 13 | 42 | 12 | 67 |
| [otherDepend/MoveNetLite/tracker/keypoint_tracker.py](/otherDepend/MoveNetLite/tracker/keypoint_tracker.py) | Python | 47 | 61 | 12 | 120 |
| [otherDepend/MoveNetLite/tracker/keypoint_tracker_test.py](/otherDepend/MoveNetLite/tracker/keypoint_tracker_test.py) | Python | 207 | 32 | 28 | 267 |
| [otherDepend/MoveNetLite/tracker/tracker.py](/otherDepend/MoveNetLite/tracker/tracker.py) | Python | 78 | 95 | 23 | 196 |
| [otherDepend/MoveNetLite/utils.py](/otherDepend/MoveNetLite/utils.py) | Python | 96 | 56 | 16 | 168 |
| [otherDepend/MoveNetLite/visualizer.py](/otherDepend/MoveNetLite/visualizer.py) | Python | 76 | 53 | 27 | 156 |
| [otherDepend/MoveNet/aa.json](/otherDepend/MoveNet/aa.json) | JSON | 87 | 0 | 0 | 87 |
| [otherDepend/MoveNet/app.py](/otherDepend/MoveNet/app.py) | Python | 68 | 41 | 17 | 126 |
| [otherDepend/MoveNet/kk.py](/otherDepend/MoveNet/kk.py) | Python | 61 | 41 | 17 | 119 |
| [otherDepend/MoveNet/requirements.txt](/otherDepend/MoveNet/requirements.txt) | pip requirements | 9 | 0 | 1 | 10 |
| [otherDepend/MoveNet/test.py](/otherDepend/MoveNet/test.py) | Python | 56 | 34 | 15 | 105 |
| [plugin/moveNet.php](/plugin/moveNet.php) | PHP | 115 | 8 | 13 | 136 |

[Summary](results.md) / Details / [Diff Summary](diff.md) / [Diff Details](diff-details.md)