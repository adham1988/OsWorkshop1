from datetime import datetime
from random import randint
from random import randrange
import random

Data = ()

def genData():
    global Data
    carID = irand = randrange(1,4 )
    x = irand = randrange(-30,30 )
    y = irand = randrange(-30,30 )

    current_Date = datetime.now()
    # convert date in the format you want
    formatted_date = current_Date.strftime('%Y-%m-%d / %H:%M:%S')
    return (carID,x, y, current_Date)






