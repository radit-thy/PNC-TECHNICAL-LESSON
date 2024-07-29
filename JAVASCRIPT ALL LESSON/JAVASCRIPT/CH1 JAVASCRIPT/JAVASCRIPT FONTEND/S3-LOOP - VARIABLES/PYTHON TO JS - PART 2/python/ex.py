BOOLEAN
OPERATORS

	
IS EQUAL, IS GREATER
x = 5
y = 5
print (x == y)
>True

AND / OR / NOT
x = 5
y = 5
print (not (x == y and ( x>5 or y<10) ))
>false

TYPES	CONVERT A STRING TO INTEGER
int(<STRING>)

n = ‘5’
print (int(n) + int(n))
>10

CONVERT A INTEGER TO STRING
str(<INTEGER>)

n = 5
print (str(n) + str(n))
>55

FUNCTION	
DEFINE A FUNCTION
def sum(n1, n2):
    total = n1 + n2
    return total

print(sum(100,200)) -> 300








DATA

STRUCTURES	
ARRAY 
# Create empty array
array = []
fruits = [“apple”, “banana”]


# Create array with values
array = [12, 13, 15, 16]

# Access using index 
value = array[2]

# Insert value at index
array.insert(1, 20)

# Insert value  at the end
array.append(20)

# Remove using index
array.pop(2)

# Get a sub array
subarray = array[2:25]


ARRAY 2D

# Create array2D with values
array2D = [ [12, 13, 15, 16], [4, 5, 6, 7]]

# Access using index
value = array2D[2][0]


DICTIONARY
# Create empty dictionary
dic = {}

# Create array with values
dic = { key1:value1, key2:value2 … }

# Access using key
value = dic[key1]

# Add value for a new key
dic[key3] = value3

# Update  value from existing key
dic[key2] = value2New


# Remove using key
dic. pop(key2)

