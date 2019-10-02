import mysql.connector
from mysql.connector import Error
from datetime import datetime
from data import Data, genData
from connector import x
import time

print(x)

try:

    connection = mysql.connector.connect(host='localhost',
                                             database='CarInfo',
                                             user='username',
                                             password='password')

    mySql_insert_query = """INSERT INTO carvelocity3 (velocity,average) 
                                VALUES (%s, %s) """

    cursor = connection.cursor()

    result = cursor.execute(mySql_insert_query, x)
    connection.commit()
    print("Date Record inserted successfully")

except Exception as error:
    connection.rollback()
    print("Failed to insert into MySQL table {}".format(error))

finally:
    if (connection.is_connected()):
        cursor.close()
        connection.close()
        print(x)

