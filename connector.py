import math
import mysql.connector
from mysql.connector import Error
from data import genData
from datetime import datetime


def calcVelocity(dist, timeDiff):
    velocity = (dist / timeDiff)
    return velocity


def calcTimeDiff(tOne, tTwo):
    timeDiff = (tTwo - tOne)
    return timeDiff


def calcDist(xOne, xTwo, yOne, yTwo):
    dist = math.sqrt((math.pow(xTwo - xOne, 2)) + (math.pow(yTwo - yOne, 2)))

    return dist


def formatData(data):
    # in case it needs formatting
    pass


def getData(carID):
    try:
        connection = mysql.connector.connect(host='192.168.1.158',
                                             database='CarInfo',
                                             user='username',
                                             password='password')
        cursor = connection.cursor(buffered=True)
        query = """SELECT * FROM car WHERE carID = %s"""

        cursor.execute(query, (carID,))
        result = cursor.fetchall()
        cursor.close()
        connection.close()
        return result

    except Exception as error:
        # Catch expected exceptions, and a catch-all
        pass


def analyze(carID):
    data = getData(carID)
    avgVelocity = 0
    prev = None
    curr = None
    format = "%Y-%m-%d %H:%M:%S.%f"
    for i in data:
        if prev == None:
            prev = i
        else:
            dist = calcDist(int(prev[1]), int(i[1]), int(prev[2]), int(i[2]))
            timeDiff = calcTimeDiff(datetime.strptime(prev[3], format), datetime.strptime(i[3], format)).total_seconds()
            velocity = calcVelocity(dist, timeDiff)

            avgVelocity += velocity
            prev = i
            curr = velocity
    avgVelocity = avgVelocity / len(data)

    return curr, avgVelocity

x = analyze(3)
