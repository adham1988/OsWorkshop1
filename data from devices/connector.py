import mysql.connector
from mysql.connector import Error
from datetime import datetime
from data import Data, genData
import time

while True:

    try:

        connection = mysql.connector.connect(host='192.168.1.152',
                                             database='CarInfo',
                                             user='username',
                                             password='password')

        mySql_insert_query = """INSERT INTO car (carID, x, y, time) 
                                VALUES (%s, %s, %s, %s) """

        cursor = connection.cursor()

        result = cursor.execute(mySql_insert_query, genData())
        connection.commit()
        print("Date Record inserted successfully")

    except Exception as error:
        connection.rollback()
        print("Failed to insert into MySQL table {}".format(error))

    finally:
        if (connection.is_connected()):
            cursor.close()
            connection.close()
            print(genData)
    time.sleep(3)

