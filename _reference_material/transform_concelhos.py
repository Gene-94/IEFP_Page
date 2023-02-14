with open('distritos') as f:
	lines = f.readlines()
	for line in lines:
		print('["nome" => \"'+line.strip()+'\"],')
