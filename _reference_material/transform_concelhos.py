with open('concelhos') as f:
	lines = f.readlines()
	for line in lines:
		print('\"'+line.strip()+'\",')
