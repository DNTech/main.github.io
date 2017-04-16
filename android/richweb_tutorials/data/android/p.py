fl = open("code.txt","r")
st = fl.read()
one = st.split('<div class="mini-logo">')[1]
two = one.split('<li class="heading">Android Useful Resources</li>')[0]
thr = two.split('<ul class="nav nav-list primary left-menu">')
del thr[4]
ln = len(thr)
c = 1
for i in range(0,ln):
	txt = thr[i]
	ar = txt.split('</li>')
	ln2 = len(ar)
	for j in range(0,ln2):
		line = ar[j]
		lnk = "https://www.tutorialspoint.com" + line.split('"')[3]
		nme = line.split('>')[2].split('<')[0]
		tp = c+".html"
		c = c + 1
		if
		fl = open(tp,"w+")
		fl.write(lnk)
		fl.close();



