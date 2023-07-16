/* acp_snowfalldimmer.js
------------------------------------*/

var snowfallACP= {};

snowfallACP.setState = function () {
	'use strict';
	const enabledDisplay = "block";
	const disabledDisplay = "none";

	$('#fontawesomeblock').css('display', (
			$('#snowgif_2').prop('selected')
		) ? enabledDisplay : disabledDisplay
	);
	$('#usersettingblock').css('display', (
			$('#snowgif_0').prop('selected')
		) ? enabledDisplay : disabledDisplay
	);
	$('#gifoption').css('display', (
			$('#snowgif_1').prop('selected')
		) ? disabledDisplay : enabledDisplay
	);

};

$(window).ready(snowfallACP.setState);
