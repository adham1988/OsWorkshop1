from datetime import datetime
carID = 11
position = 4.5
speed = 800


current_Date = datetime.now()
# convert date in the format you want
formatted_date = current_Date.strftime('%Y-%m-%d %H:%M:%S')
Data = (carID,position, speed, current_Date)


print(carID,position,speed)



