navigator.webkitGetUserMedia({video: true, audio: false}, function (stream){

	var Peer = require('simple-peer');
	var peer = new Peer({
	    initiator: location.hash === '#init',
	    trickle: false,
	    stream: stream
	});


	peer.on('error', function (err) { console.log('error', err) })
	 
	peer.on('signal', function (data) {
	  console.log('SIGNAL', JSON.stringify(data));
	  document.querySelector('#yourid').textContent = JSON.stringify(data);
	})

	$('#connect').click(function(e) {
	    var otherId = JSON.parse(document.getElementById('otherid').value);
	    peer.signal(otherId);
	});

	$('#send').click(function(e) {
	    var yourmessage = document.getElementById('yourmessage').value;
	    peer.send(yourmessage);
	});

	peer.on('data', function(data){
	document.getElementById('messages').textContent += data + '\n';
	});


	peer.on('stream', function(stream){
		var video = document.createElement('video');
		document.body.appendChild(video);

		video.src=window.URL.createObjectURL(stream);
		video.play();
	})

},
	function(err){
		console.error(err);
})