#!/usr/bin/python3
import RPi.GPIO as GPIO
GPIO.setwarnings(False)
GPIO.setmode(GPIO.BCM)
GPIO.setup(7,GPIO.OUT)
GPIO.output(7,GPIO.HIGH)
print("ON")
