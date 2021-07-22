<!DOCTYPE html>
<html>
	<head>
			<meta charset="utf-8">
			<title>rendering</title>
			<style>
				* {
                    font-family: arial;
                    color: rgb(66,66,66);
                }
                #logdisplay	{
                    font-family: monospace;
                    white-space: pre-line;
                    padding-left: 3em;
				    border-left: 1px solid
                }
                .hidden { display: none }
			</style>	
	</head>
	<body>
		<h1>rendering</h1>
        <div id="dl-section" class="hidden">
            <h2>download link</h2>
            <a id="dl-link" href="" >download</a>
        </div>
        <h2>logs:</h2>
        <pre id="logdisplay"></pre>
        <h2>images:</h2>
        <ul id="img-list"></ul>
	</body>
    <script src="../ctr/getlog.js"></script>
    <script src="../ctr/getimgs.js"></script>
</html>


