import mysql.connector
from mysql.connector import Error
from datetime import datetime
from data import Data
try:
    connection = mysql.connector.connect(host='localhost',
                                         database='CarInfo ',
                                         user='username',
                                         password='password')

    mySql_insert_query = """INSERT INTO car (carID, position, speed, time) 
                            VALUES (%s, %s, %s, %s) """

    cursor = connection.cursor()

    result = cursor.execute(mySql_insert_query, Data)
    connection.commit()
    print("Date Record inserted successfully")

except mysql.connector.Error as error:
    connection.rollback()
    print("Failed to insert into MySQL table {}".format(error))

finally:
    if (connection.is_connected()):
        cursor.close()
        connection.close()
        print("MySQL connection is closed")
