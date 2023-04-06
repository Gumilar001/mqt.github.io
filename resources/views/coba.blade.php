<!DOCTYPE html>
<html>
    {{-- <head>
        <title>MQTT WebSocket</title>
    </head>
    <body>
        <h1>MQTT WebSocket Example</h1>
        <div id="messages"></div>
        <script>
            const socket = new WebSocket("ws://localhost:3000");

            socket.onopen = () => {
                console.log("WebSocket connected");
            };

            socket.onmessage = (event) => {
                const messages = document.getElementById("messages");
                const message = document.createElement("div");
                message.innerText = event.data;
                messages.appendChild(message);
            };
        </script>
    </body>
</html> 
 --}}

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="UTF-8">
     <title>MQTT over Websocket Client</title>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/paho-mqtt/1.0.1/mqttws31.js"></script>
     <script>
       // Membuat koneksi ke broker MQTT menggunakan Websocket
       var client = new Paho.MQTT.Client("C:\Program Files\mosquitto", Number("8000"), "mqtt://localhost:1883");
       
       // Menghubungkan klien ke broker
       client.connect({
         onSuccess: onConnect,
         onFailure: onFailure
       });
       
       // Fungsi yang dipanggil ketika klien terhubung ke broker
       function onConnect() {
         console.log("Connected to MQTT broker over Websocket");
         
         // Mendaftar topik yang ingin diterima oleh klien
         client.subscribe("<mqtt-topic>");
         
         // Mengirim pesan ke broker
         var message = new Paho.MQTT.Message("Hello, World!");
         message.destinationName = "<mqtt-topic>";
         client.send(message);
       }
       
       // Fungsi yang dipanggil ketika koneksi gagal
       function onFailure(error) {
         console.log("Failed to connect to MQTT broker over Websocket: " + error.errorMessage);
       }
       
       // Fungsi yang dipanggil ketika klien menerima pesan dari broker
       client.onMessageArrived = function(message) {
         console.log("Received message: " + message.payloadString);
       };
     </script>
   </head>
   <body>
     <h1>MQTT over Websocket Client</h1>
   </body>
 </html>
 