users = ["Jannis","Kilian", "Marietta", "Michael", "Ursula", "Ruediger", "Alexander", "Nicola"]
def generate(_input,number):
	for i in range(0, number):
		_temp_list = users[:]
		for name in _temp_list:
			print name
		print "OK"

generate(0,2)
