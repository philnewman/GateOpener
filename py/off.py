#!/usr/bin/python3
import RPi.GPIO as GPIO
GPIO.setwarnings(True)
GPIO.setmode(GPIO.BCM)
GPIO.setup(7,GPIO.OUT)
GPIO.output(7,GPIO.LOW)
print("OFF")
