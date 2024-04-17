# GateOpener
## Raspberry Pi powered opener for an automatic gate

Based off code found: https://www.instructables.com/id/Raspberry-Pi-Garage-Door-Opener/

### EQUIPMENT:
- [Raspberry Pi Zero 2 W](https://www.amazon.com/dp/B09LH5SBPS)
- [3v Relay](https://www.amazon.com/dp/B09G65YFZ6)
- [12v to 5v converter with micro-USB](https://www.amazon.com/dp/B09DGFR24W)
- SD Card
- [Liftmaster Automatic Gate with LA-412-S controller](https://support.chamberlaingroup.com/s/article/Gates-LA412-LA412-S-Solar-Gate-Operator-Owner-s-Manual-1484145531763)

Automatic gate opener using a Raspberry Pi 4 to server a website available on local network. 

### INSTALLATION NOTES: 
1. Install Raspberry Pi OS without GUI. 
2. Install apache2 and php on your Pi.
3. Copy the repo to /var/www/html.
4. Remove /var/www/html/index.html or rename it to index.html.old
5. Create startup service (covers power outage situation - more to come...) 
6. Wire to gate controller board.

### WIRING NOTES:
- GPIO 7
- Connecting to gate will vary by manufacturer (good info here: [https://www.nold.io/compatibility/category/02/](https://www.nold.io/compatibility/category/02/)https://www.nold.io/compatibility/category/02/)

### ADDITIONAL INFO:
- no security or auth required (yet)
- This code will also work for garage door openers.
- This code cans be modified to control 2 separate doors with the 2 channel relay. See code modifications: [https://github.com/nwielenga/garageDoorOpener](https://github.com/nwielenga/garageDoorOpener)https://github.com/nwielenga/garageDoorOpener
