from datetime import datetime
from random import randint
from random import randrange
import random

Data = ()

def genData():
    global Data
    a = 1.1
    b = 8.8
    carID = 2
    position = random.randint(a*10,b*10)/10
    speed = irand = randrange(60,100 )

    current_Date = datetime.now()
    # convert date in the format you want
    formatted_date = current_Date.strftime('%Y-%m-%d / %H:%M:%S')
    return (carID,position, speed, current_Date)





