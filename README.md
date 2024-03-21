# GateOpener
## Raspberry Pi powered opener for an automatic gate

Based off code found: https://www.instructables.com/id/Raspberry-Pi-Garage-Door-Opener/

### EQUIPMENT:
- [Raspberry Pi 4](https://www.amazon.com/Raspberry-Pi-Computer-Suitable-Workstation/dp/B0899VXM8F/ref=sr_1_4?crid=MA0NAXAXJRLZ&dib=eyJ2IjoiMSJ9.mP4drOfyakW9P2E6ytjWi16gj2s3LrQBGuFeMtbTEh_Hjly50dXjFlXs49uF3-y5GZ4yLeWVFpzYzBM4aTzD09t8hNRKRXdhQZcyx6Dso6uzNGeuhoL-ILgjlH_n8UEG5q_0tpNELcWjD_j6vvJxDutGhCpeZ-r4v7t_EALQSB7tt_zJmnWMC6uR6VP3E4LQgysDsC75igcDwxXlxguA1jDL1fqRxvzvOYPwl0Bmcrc.UlYNlN5ZpK4U2Qry1zesMJicmq9ZQ10g_YWa1oNZG80&dib_tag=se&keywords=raspberry+pi+4&qid=1710962317&sprefix=raspberry+pi+4%2Caps%2C154&sr=8-4)
- [Relay (2 channel relay)](https://www.amazon.com/SunFounder-Channel-Optocoupler-Expansion-Raspberry/dp/B00E0NTPP4/ref=sr_1_1?crid=2ZKCIOCRADC7X&dib=eyJ2IjoiMSJ9.VP_phiNh6Kjtr_6xNxDT1XM_nS5i8mEDcseUWx3Alt2C-SwAB3MUFJCRkXR56uGq_uOcMP-f9rNYrqE54qDedOC6Qc0D_hHdRu2rfeD4G9mV3sIYg5NGfaif7DSPvxwU277rQFmBR473-VJfaPIkayi5jvQx7xZd7_kXnc5x3c2wz0wvYwh65H1koIUMwN39OZFL0ivAfZr_bThyfBYDx4A6JYzwDliFbumHjOEdSSw.PpkZ3sllmeQtiAJ4I3vz6NQYZ4EaRpxZ8Rp1hiWtZVk&dib_tag=se&keywords=sunfounder%2B2%2Bchannel%2Brelay%2Bmodule&qid=1710962358&sprefix=sunfounder%2B2%2Bchannel%2Brelay%2Bmodule%2Caps%2C133&sr=8-1&th=1)
- [12v to 5v converter](https://www.amazon.com/PlusRoc-Waterproof-Converter-Compatible-Raspberry/dp/B09DGDQ48H/ref=sr_1_1_sspa?crid=KIOBQPRTF7ZF&dib=eyJ2IjoiMSJ9.K8kYqBQ90K39ZGOLH3hoPOtMlNrnEjtvSa6_BkSGdBZh5X2h1SbEU4u4DAJw89yZDfphdnSwVzm-Sf83HV5Bl6w7H8tnemyjPCp_VJzwdEJ8O3prDejPIMwam6Iof4ZSK3sTDtOqqiU6WPuLhnXRgWmRytCAYhaDL-zpGyongLdAfR4sDSH9mLhi3g6Sgq24Jop8gVAypJrALxmSO0agP6UJu0t9YJ5D3sXPwkqzhUE.TmmIb0l4yYjQMX4zUie_Nl_335VjRTFz5Bs1ETrKMbo&dib_tag=se&keywords=12v%2Bto%2B5v%2Bconverter&qid=1710962329&sprefix=12v%2Bto%2B5v%2Caps%2C157&sr=8-1-spons&sp_csd=d2lkZ2V0TmFtZT1zcF9hdGY&th=1)
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
