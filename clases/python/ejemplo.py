
import gtts 
from playsound import playsound

audio = "archivo.mp3"

help(gtts.lang)

tts = gtts(text="hola mi nombre es pepe y soy un pipa", leng="es")
tts.save(audio)
playsound(audio)


