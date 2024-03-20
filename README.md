# GateOpener
## Raspberry Pi powered opener for an automatic gate

Based off code found: [https://www.instructables.com/id/Raspberry-Pi-Garage-Door-Opener/ ]

### EQUIPMENT:
- Raspberry Pi 4
- Relay (2 channel relay)
- 12v to 5v converter
- SD Card
- Liftmaster Automatic Gate with LA-412-S controller

Automatic gate opener using a Raspberry Pi 4 to server a website available on local network. 

### INSTALLATION NOTES: 
1. Install apache2 and php on your Pi.
2. Copy the repo to /var/www/html.
3. Remove /var/www/html/index.html or rename it to index.html.old
4. Wire to gate controller board

### WIRING NOTES:
- GPIO 7
- Connecting to gate will vary by manufacturer (good info here: [https://www.nold.io/compatibility/category/02/](https://www.nold.io/compatibility/category/02/)https://www.nold.io/compatibility/category/02/)

### ADDITIONAL INFO:
- no security or auth required (yet)
