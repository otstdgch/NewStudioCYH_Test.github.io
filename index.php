<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>贵州小炒</title>
    <style>
        *{
            padding: 0%;
            margin: 0%;
        }
        /* 设置标题栏样式 */
        .title-bar {
            background-color: #ffffff; /* 浅灰色 */
            color: #000000; /* 黑色 */
            font-size: 18px; /* 字体大小，18px相当于18dp */
            padding: 10px 0; /* 上下10px，左右0px的内边距 */
            text-align: center; /* 文本居中 */
            position: fixed; /* 固定定位 */
            top: 0; /* 顶部对齐 */
            width: 100%; /* 宽度为100% */
            z-index: 1000; /* 确保标题栏在最上层 */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* 添加阴影效果 */
        }
    </style>
</head>
<body>
    <!-- 标题栏 -->
    <div class="title-bar">欢迎您的到来--<?php $_GET["Tablenum"] ?>号桌</div>
    <!-- 页面内容 -->
    <div style="padding-top: 60px;"> <!-- 为标题栏留出空间 -->
        <!-- 这里可以添加其他页面内容 -->
    </div>
</body>
</html>
