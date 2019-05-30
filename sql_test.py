import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="id3962872_admin",
  passwd="jiten3446472",
  database="id3962872_users"
)
#agroassist.000webhostapp.com","id3962872_admin","jiten3446472","id3962872_users
mycursor = mydb.cursor()

sql = "UPDATE Users SET humidity = %d WHERE Username = %s"
val = (45, "Jiten")

mycursor.execute(sql, val)

mydb.commit()

print(mycursor.rowcount, "record(s) affected")
