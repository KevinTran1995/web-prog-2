function shrinkOut ( selector, duration )
{
	var tstep = duration / 20;
	var ostep = 100 / 20;
	var remaining = duration;
	var targets;
	var fader;
	var i;
	
	if ( selector instanceof Element ) {
	
		if ( selector.style.height === '' ) {
			selector.style.height = '100';
		}
		
		fader = function () {
			selector.style.height = Math.max(0,parseFloat(selector.style.height) - ostep).toString()+"px";
			duration -= tstep;
			if ( duration >= 0 ) {
				setTimeout(fader, tstep);
			}
		};
		setTimeout(fader, tstep);
	
	} else if ( typeof selector === 'string' || selector instanceof String ) {
		targets = document.getElementsByTagName(selector);
		for ( i = 0; i < targets.length; ++i ) {
			elem = targets.item(i);
			if ( elem.style.height === '' ) {
				elem.style.height = '100px';
			}
		}
	
		fader = function () {
			var i;
			var elem;
			for ( i = 0; i < targets.length; ++i ) {
				elem = targets.item(i);
				elem.style.height = Math.max(0,parseFloat(elem.style.height) - ostep).toString()+"px";
			}
			duration -= tstep;            
			if ( duration >= 0 ) {
				setTimeout(fader, tstep);
			}
		};
		setTimeout(fader, tstep);
	
	} else {
	alert('Unsupported selector type!');
	}
}


window.addEventListener('load', function() {
	shrinkOut('img', 2000);
});