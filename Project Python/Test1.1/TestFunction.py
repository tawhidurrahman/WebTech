from urllib.request import urlopen
from lxml import html
import requests
from selenium import webdriver
from bs4 import BeautifulSoup
from urllib import parse
import urllib.parse
import json
import re
import ast
import cx_Oracle

con = cx_Oracle.connect('system/123456@localhost:1521/orcl')
cur = con.cursor()
'''
response = urlopen('http://www.hungrynaki.com/restaurant-list/1/192/dhaka-housing')
data = json.loads('{"type":"Area Listings","city":[{"id":"1","name":"Dhaka","status":"1","area":[{"id":"183","name":"Adabor"},{"id":"211","name":"Agargaon"},{"id":"248","name":"Badda"},{"id":"24","name":"Bailey Road"},{"id":"196","name":"Baitul aman housing society"},{"id":"2","name":"Banani"},{"id":"7","name":"Banani dohs"},{"id":"4","name":"Baridhara"},{"id":"8","name":"Baridhara dohs"},{"id":"223","name":"Baridhara j block"},{"id":"123","name":"Basabo"},{"id":"18","name":"Bashundhara"},{"id":"142","name":"Cantonment"},{"id":"121","name":"Chowdhurypara "},{"id":"208","name":"Darus salam"},{"id":"192","name":"Dhaka housing"},{"id":"232","name":"Dhaka university area"},{"id":"13","name":"Dhanmondi"},{"id":"205","name":"Eastern housing project-2"},{"id":"36","name":"Elephant Road"},{"id":"25","name":"Eskaton"},{"id":"124","name":"Goran"},{"id":"133","name":"Green road"},{"id":"1","name":"Gulshan 1"},{"id":"3","name":"Gulshan 2"},{"id":"37","name":"Hatirpul residential area"},{"id":"71","name":"Indira road"},{"id":"135","name":"Kakrail"},{"id":"238","name":"Kalabagan"},{"id":"202","name":"Kallyanpur"},{"id":"38","name":"Katabon"},{"id":"243","name":"Kawran bazar"},{"id":"120","name":"Khilgaon"},{"id":"56","name":"Khilgaon-taltola"},{"id":"14","name":"Lalmatia"},{"id":"169","name":"Maghbazar"},{"id":"134","name":"Malibagh"},{"id":"19","name":"Mirpur dohs"},{"id":"41","name":"Mirpur-1"},{"id":"30","name":"Mirpur-10"},{"id":"31","name":"Mirpur-11"},{"id":"32","name":"Mirpur-12"},{"id":"34","name":"Mirpur-13"},{"id":"35","name":"Mirpur-14"},{"id":"28","name":"Mirpur-2"},{"id":"29","name":"Mirpur-6"},{"id":"42","name":"Mirpur-7"},{"id":"33","name":"Mirpur-Pallabi"},{"id":"17","name":"Mohakhali"},{"id":"6","name":"Mohakhali dohs"},{"id":"15","name":"Mohammadpur"},{"id":"239","name":"Monipuripara"},{"id":"195","name":"Monsurabad housing society"},{"id":"12","name":"Niketan"},{"id":"150","name":"Nikunjo - 1"},{"id":"72","name":"Nikunjo - 2"},{"id":"189","name":"Nobodoy housing society"},{"id":"70","name":"Panthapath"},{"id":"69","name":"Paribagh"},{"id":"236","name":"Rayer bazar"},{"id":"136","name":"Segunbagicha"},{"id":"246","name":"Shahjadpur"},{"id":"160","name":"Shahjanpur"},{"id":"26","name":"Shantinagar"},{"id":"181","name":"Shekhertek"},{"id":"214","name":"Sher-e-bangla nagar"},{"id":"16","name":"Shyamoli"},{"id":"219","name":"Shyamoli 1-2-3-4"},{"id":"27","name":"Siddeshwari"},{"id":"225","name":"Tejgaon"},{"id":"5","name":"Uttara"},{"id":"177","name":"Zigatola"}]},{"id":"3","name":"Sylhet","status":"1","area":[{"id":"119","name":"Alurtal"},{"id":"59","name":"Ambarkhana"},{"id":"67","name":"Baghbari  R-A"},{"id":"47","name":"Baluchor"},{"id":"51","name":"Barud Khana"},{"id":"54","name":"Bondar Bazar"},{"id":"80","name":"Dargah mahalla"},{"id":"82","name":"Daria para"},{"id":"61","name":"Housing State"},{"id":"171","name":"Jalalabad cantonment-boteshwar area"},{"id":"132","name":"Jamtola"},{"id":"50","name":"Jhornar Par"},{"id":"68","name":"Kajal Shah"},{"id":"58","name":"Kazitula"},{"id":"79","name":"Kuar par"},{"id":"78","name":"Kumar para"},{"id":"74","name":"Lal dighir par"},{"id":"65","name":"Lamabazar"},{"id":"60","name":"Londoni Para R-A"},{"id":"131","name":"Madina market"},{"id":"76","name":"Mahajan patti"},{"id":"63","name":"Medical College Area"},{"id":"146","name":"Mejortila-islampur bazar"},{"id":"48","name":"Mirabazar"},{"id":"52","name":"Mirboxtula"},{"id":"77","name":"Mirer maydan"},{"id":"64","name":"Mirja Jongal"},{"id":"53","name":"Naya Sarak"},{"id":"144","name":"North-east medical college campus"},{"id":"91","name":"Pathantula"},{"id":"75","name":"Police line "},{"id":"84","name":"Rikabi bazar"},{"id":"73","name":"Sagor dighir par"},{"id":"49","name":"Senpara"},{"id":"83","name":"Shahi eidgah"},{"id":"81","name":"Sheikh ghat"},{"id":"45","name":"Shibgonj"},{"id":"55","name":"Sobhanighat"},{"id":"62","name":"Subidbazar R-A"},{"id":"118","name":"Sust campus area"},{"id":"145","name":"Sylhet poly technique inst campus "},{"id":"46","name":"Tilagor"},{"id":"44","name":"Uposhohor R-A"},{"id":"57","name":"Zindabazar"}]},{"id":"4","name":"Chittagong","status":"1","area":[{"id":"104","name":"2 no gate "},{"id":"94","name":"Chawk bazar"},{"id":"93","name":"Foys lake r-a"},{"id":"113","name":"Jamal khan"},{"id":"103","name":"Kazir dewri bazar"},{"id":"111","name":"Khulshi"},{"id":"97","name":"Lalkhan bazar"},{"id":"107","name":"Mehdibag r-a"},{"id":"101","name":"Muradpur"},{"id":"100","name":"Nasirabad housing society"},{"id":"99","name":"O r nizam road"}]},{"id":"8","name":"Narayanganj","status":"1","area":[{"id":"277","name":"Amla para"},{"id":"305","name":"Aucto office"},{"id":"287","name":"Baburail"},{"id":"319","name":"Bank colony"},{"id":"274","name":"Bscic"},{"id":"318","name":"Chanmari"},{"id":"335","name":"Chashara"},{"id":"294","name":"College road"},{"id":"316","name":"Dc office - zilla parishad"},{"id":"290","name":"Deobhog"},{"id":"329","name":"Dit"},{"id":"256","name":"Don chamber"},{"id":"309","name":"Gabtoli"},{"id":"297","name":"Gola chipa"},{"id":"323","name":"Isdair "},{"id":"299","name":"Jamtola"},{"id":"275","name":"Kali bazar"},{"id":"339","name":"Kellarpool"},{"id":"285","name":"Mandol para"},{"id":"338","name":"Masdair"},{"id":"268","name":"Metro hall"},{"id":"261","name":"Mission para"},{"id":"320","name":"Narayanganj court"},{"id":"326","name":"Narayanganj vet hospital"},{"id":"278","name":"Nayamati"},{"id":"264","name":"Nogor khanpur"},{"id":"306","name":"Police line"},{"id":"312","name":"Ponchoboti"},{"id":"314","name":"Sibu market"},{"id":"283","name":"Tanbazar"},{"id":"266","name":"Tolla"}]}]}')
#html_bytes = response.read().decode("utf-8")
#html_string = html_bytes.decode("utf-8")
#print(html_bytes)
print(data['city'])


response = requests.get('http://www.hungrynaki.com/restaurant-list/1/192/dhaka-housing', allow_redirects = False)
#code = response.content.decode('utf-8')
print(response.text)


driver = webdriver.Firefox()
driver.get('http://www.hungrynaki.com/restaurant/10/sky-room-dining-banani/menu')

html = driver.page_source
soup = BeautifulSoup(html, features="lxml")

driver.close()


for tag in soup.find_all("a"):
	if tag.has_attr('href'):
		if 'restaurant-list' in tag.attrs['href']:
			url = parse.urljoin('http://www.hungrynaki.com/', tag.attrs['href'])
			print(url)

upcoming_events_div = soup.find('div', class_='title')
for link in soup.select('div.title p'):
	print (link.text)
	
upcoming_events_div = soup.find('div', class_='subMenuItemsHolder flex-con clearfix')
for link in soup.select('div.subMenuItemsHolder flex-con clearfix p.price'):
	print (link.text)
'''
'''
response = requests.get('http://www.hungrynaki.com/', allow_redirects = False)
code = response.content.decode('utf-8')
soup = BeautifulSoup(code, features="lxml")

script = soup.find_all("script")
req_script = script[19].text.split('\n')

json_string = req_script[4].replace('			var arealist_string       = ', '')
json_string = json_string.replace(';', '')
json_data = ast.literal_eval(json_string)
area_details_json_data = json.loads(json_data)

i = 0
for city in area_details_json_data['city']:
	for area in city['area']:
		s  = "http://www.hungrynaki.com/restaurant-list/" + city['id'] + "/" + area['id'] + "/" + area['name']
		print(i)
		print(s)
		print(city['id'] + " " + city['name'] + " " + city['status'] + " " + area['id'] + " " + area['name'])
		i = i + 1
'''
'''
response = requests.get('http://www.hungrynaki.com/restaurant-list/1/211/Agargaon', allow_redirects = False)
code = response.content.decode('utf-8')
soup = BeautifulSoup(code, features="lxml")

script = soup.find_all("script")
#print(script)
req_script = script[17].text.split('\n')
#print(req_script)

json_string = req_script[4].replace('			var restlist_string       = ', '')
json_string = json_string.replace(';', '')
json_data = ast.literal_eval(json_string)
restaurant_details_by_area_json_data = json.loads(json_data)

i = 1
for restaurant in restaurant_details_by_area_json_data['restaurants']:
	print(i)
	i += 1
	print(restaurant['address'])
	cur.callproc('insert_into_restaurant', [restaurant['name'], 'Badda', restaurant['address']])
	restaurant_name = str(restaurant['name']).lower().replace(' ', '-')
	restaurant_url = "http://www.hungrynaki.com/restaurant/" + restaurant['id'] + "/" + restaurant_name + "/menu"
	#print(restaurant_url)
	
	
'''
response = requests.get('http://www.hungrynaki.com/restaurant/198944/burger-king-dhanmondi/menu', allow_redirects = False)
code = response.content.decode('utf-8')
soup = BeautifulSoup(code, features="lxml")

script = soup.find_all("script")
#print(script)
req_script = script[22].text.split('\n')
#print(req_script)

json_string = req_script[4].replace('			var restmenu_string       = ', '')
json_string = json_string.replace(';', '')
while (1):
	k = json_string.find('\\r\\n')
	#print(k)
	if (k > 0):
		json_string = json_string.replace('\\r\\n', '')
	else:
		break
json_data = ast.literal_eval(json_string)
#json_data = json_data.replace('\n', '')
#print(type(json_data))
restaurant_details_by_area_json_data = json.loads(json_data)
#print(type(restaurant_details_by_area_json_data))
#print(restaurant_details_by_area_json_data)

categorys = restaurant_details_by_area_json_data['categorys']
#print(type(catagory))
#print(catagory)

#catagory = catagory.pop(0)
#print(type(catagory))
#print(catagory)

#menu = catagory['menu-items']
#print(type(menu))
#print(menu)

#for x in catagory['menu-items']:
#	print(type(x))
#	print(x)

for category in categorys:
	#print(x['menu-items'])
	for menu_items in category['menu-items']:
		#		print(menu_items['name'])
		for sub_items in menu_items['sub-items']:
			print(sub_items)
			#cur.callproc('insert_into_food', [sub_items['name'], sub_items['price'], sub_items['category_name']])