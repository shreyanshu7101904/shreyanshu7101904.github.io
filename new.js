
	

Why not just create a function, and then call it? This sounds like what you are wanting, anyway. I could be wrong. However, you want to be VERY careful using Twilio API's client-side. This opens up a large security risk. Someone can easily get the account credentials to send tons of text messages with your money.

function sendTextMessage() {

  var phoneNumber = $("#phoneNumberField).val();

  var accountSid = 'ACOUNTSID';
  var authToken = 'AUTHTOKEN';

  var client = require('twilio')(accountSid, authToken);

  client.messages.create({ 
    to: phoneNumber,
    from: "+19171234567",
    body: "Hellow from Twilio?",
  }, function(err, message) {
    console.log(message.sid);
  }); 

}
