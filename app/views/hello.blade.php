<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Consumer</title>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>

	Sample Page
	<div id="themio_content"></div>
	<script>
		var themio_options = {
			'account': 'endata',
			'content': [ 
				{'id': '_poll_03720785-81c7-4175-d799-1ff31ec7fab4', 'div': 'themio_content'},
				{'id': '_poll_03720785-81c7-4175-d799-1ff31ec7fab5', 'div': 'themio_content2'}
			]};

		var elem = document.createElement('script'); elem.async = true;
		elem.src = '//' + themio_options.account + '.them.dev/embed.js';
		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(elem);
    </script>
    Bottom

	<hr/>

	Second Area
	<div id="themio_content2"></div>
    Bottom


</body>
</html>