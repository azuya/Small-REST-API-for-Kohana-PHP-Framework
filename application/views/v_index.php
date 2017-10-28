<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$title?></title>
        <style>
                body:before, 
                .nav:after, .nav:before,
                .content:after, .content:before
                {
                    display: table;
                    content: " ";
                }
                .nav,.content {
                    display: block;
                    width: 100%;
                    margin-bottom: 20px;
                }
                .nav {
                    position: relative;
                    min-height: 60px;
                    border-bottom: 1px solid #ccc;
                }
                .nav ul {
                    list-style: none;
                }
                .nav li {
                    float: left;
                    margin: 0 3px 0 3px;
                }
                .nav li a {
                    background: #ececec none repeat scroll 0 0;
                    cursor: pointer;
                    position: relative;
                    text-decoration: none;
                    transition-duration: 0.3s;
                    color: #333;
                    font-weight: normal;
                    font-size: 19px;
                    padding: 5px 15px;
                }
                .nav li a:hover {
                    background: #e2e0e0 none repeat scroll 0 0;
                }
                .content {
                    color: #333;
                    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
                    font-weight: normal;
                    font-size: 16px;
                }
                .wrap {
                    width: 1170px;
                    padding-right: 15px;
                    padding-left: 15px;
                    margin-right: auto;
                    margin-left: auto;
                }

                </style>
</head>
<body>
    <div class="wrap">
    
        <?=$menu?>
        
        <?=$content?>
    
    </div>
</body>
</html>

