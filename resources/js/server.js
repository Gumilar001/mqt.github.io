const mqtt = require("mqtt");

// konfigurasi klien MQTT
const options = {
    clientId: "my_client_id", // mengatur Client ID
    username: "my_username",
    password: "my_password",
    clean: true,
};

// membuat klien MQTT
const client = mqtt.connect("mqtt://localhost", options);

// menghubungkan klien ke broker MQTT
client.on("connect", () => {
    console.log("Klien terhubung ke broker MQTT");

    // menerbitkan pesan ke broker MQTT
    const topic = "my/topic";
    const message = "Hello, world!";
    client.publish(topic, message, () => {
        console.log("Pesan terkirim:", message);
        client.end(); // menutup koneksi klien MQTT
    });
});
