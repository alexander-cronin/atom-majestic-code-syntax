def hello_python():
    print("Hello Python!")


hello_python()

x, y, z = "Orange", "Banana", "Cherry"
print(x)
print(y)
print(z)

x = y = z = "Orange"
print(x)
print(y)
print(z)

x = "awesome"
print("Python is " + x)

x = "Python is "
y = "awesome"
z = x + y
print(z)

x = "awesome"


def myfunc():
    print("Python is " + x)


myfunc()

cars = ["Ford", "Volvo", "BMW"]
print(cars)

for car in cars:
    print(car)


x = len(cars)
print(x)

# nested dictionary
myfamily = {
  "child1": {
    "name": "Emil",
    "year": 2004
  },
  "child2": {
    "name": "Tobias",
    "year": 2007
  },
  "child3": {
    "name": "Linus",
    "year": 2011
  }
}

print(myfamily)
