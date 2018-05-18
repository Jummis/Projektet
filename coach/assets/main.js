window.onload=toBottom;

function toBottom()
{
var message = document.getElementById("chatbox");
message.scrollTop = message.scrollHeight;
}