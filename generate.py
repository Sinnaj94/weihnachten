import random
users = ["Jannis","Kilian", "Marietta", "Michael", "Ursula", "Ruediger", "Alexander", "Nicola"]
def generate(_input,number):
	_user_groups = []
	hasDuplicate(users,users)
	for i in range(0, number):
		_copy_array = users[:]

def randomizeArray(list):
	_return = random.shuffle(list)
	for element in _return:
		print element

def hasDuplicate(list1,list2):
	index = 0
	for element, element2 in zip(list1, list2):
		if(element == element2):
			print "Has Duplicate " + element
			return True
	return False

generate(0,2)
