import requests,sys,os,time,json
from time import sleep
import time
try:
  from termcolor import colored
except:
  os.system('pip install termcolor')
  from termcolor import colored
os.system('clear')
try:
  a = open("Author.txt",'x')
  t = open("T.txt","x")
except:
  ah = 0
select = input(colored("(lần đầu ấn 'y'  đăng nhập lại  ấn 'n'","cyan"))
while True:
  if select == 'y':
    Author = input(colored("nhập Authorization:                Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9nYXRld2F5LmdvbGlrZS5uZXRcL2FwaVwvbG9naW4iLCJpYXQiOjE3MTIxMjQ2MTYsImV4cCI6MTc0MzY2MDYxNiwibmJmIjoxNzEyMTI0NjE2LCJqdGkiOiJGQWViQ2duS1Y5RkZsM0o5Iiwic3ViIjoyNjI0ODUzLCJwcnYiOiJiOTEyNzk5NzhmMTFhYTdiYzU2NzA0ODdmZmYwMWUyMjgyNTNmZTQ4In0.uCydURoZWywiXH9tYWGrBtgRZcVP1RDaYp9EbASF7eo     ","yellow"))
    T = input(colored("nhập T:              VFZSamVFMXFSWGxPUkZsNVRsRTlQUT09","yellow"))
    a = open("Author","w")
    t = open("T.txt","w")
    a.write(Author)
    t.write(T)
    a.close()
    t.close()
    break
  elif select == 'n':
    a = open("Author","r")
    t = open("T.txt","r")
    Author = a.read()
    T = t.read()
    a.close()
    t.close()
    break
  else:
    select= input("chỉ nhập y hoặc n: ")
headers = {
    'Accept': 'application/json, text/plain, */*',
    'Content-Type': 'application/json;charset=utf-8',
    'Authorization': Author,
    't': T,
    'User-Agent': 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Mobile Safari/537.36',
}
def ttacc():
  params = {
    'limit': '20',
}

  json_datatt = {}

  t = requests.get('https://gateway.golike.net/api/notification', params=params, headers=headers, json=json_datatt).json()
  return t
def chonacc():
  json_datac = {}

  chon = requests.get('https://gateway.golike.net/api/tiktok-account', headers=headers, json=json_datac).json()
  return chon
def laynv(idtt):
  params = {
    'account_id': idtt,
    'data': 'null',
}

  json_datal = {}

  l = requests.get(
    'https://gateway.golike.net/api/advertising/publishers/tiktok/jobs',
    params=params,headers=headers,json=json_datal).json()
  return l
def hoanthanh(idjob,idtt):
  json_data = {
    'ads_id': idjob,
    'account_id': idtt,
    'async': True,
    'data': None,
}

  ht = requests.post(
      'https://gateway.golike.net/api/advertising/publishers/tiktok/complete-jobs',
      headers=headers,
      json=json_data,
  ).json()
  return ht
def send(idjob,idtt)  :
  json_data = {
    'description': 'Tôi không muốn làm Job này',
    'users_advertising_id': idjob,
    'type': 'ads',
    'provider': 'tiktok',
    'fb_id': idtt,
    'error_type': 0,
}

  s = requests.post('https://gateway.golike.net/api/report/send', headers=headers, json=json_data).json()
  return s

def boqua(idjob,oid,idtt,loai):
  json_datab = {
    'ads_id': idjob,
    'object_id': oid,
    'account_id': idtt,
    'type': f'{loai}',
}

  bq = requests.post(
    'https://gateway.golike.net/api/advertising/publishers/tiktok/skip-jobs',
    headers=headers,
    json=json_datab,).json()
  return bq
xu = requests.get('https://gateway.golike.net/api/statistics/report', headers=headers).json()['current_coin']  
t = ttacc()  
if t['success'] == 'true':
  print(colored('==============================',"green"))
  print(colored("đăng nhập thành công","yellow"))
  print(colored("username: "+t['data'][0]['username'],"blue"))
  print(colored("số dư hiện tại: ","red")+colored(xu,"yellow"))
delay = int(input("nhập delay giữa các job: "))
os.system('clear')
print(colored('======================================================================================================================',"green"))
print(colored("chọn tài khoản tiktok làm job","yellow"))
c = chonacc()
_c = c['data']
for i in range(len(_c)):
  print(colored(f'{i}'+':'+_c[i]['nickname'],"yellow"))
print(colored('======================================================================================================================',"green"))
luachon = int(input(colored("chọn tài khoản muốn làm: ","blue")))
os.system('clear')
baner = """
\033[1;34m                        \\
\033[1;31m _________              _\\_      ____      _
\033[1;32m/________///     //    /    \    | |\ \    | |//     //
\033[1;33m    //    //     //   /  /\  \   | | \ \   | |//     //
\033[1;34m    //    //--_--//  /  /__\  \  | |  \ \  | |//\\\\\\\\\\//
\033[1;35m    //    //     // /  /____\  \ | |   \ \ | |//     //
\033[1;36m    //    //     ///__/      \__\|_|    \_\|_|//     //
\033[5;32m           code by Thành dz siêu cấp vippro
\033[1;33m======================================================================================================================
\033[0m
"""
print(baner)
idtt = _c[luachon]['id']
t = 0
tong = 0
while True:
  get = laynv(idtt)
  if get['success'] == True:
    oid = get['data']['object_id']
    idjob = get['data']['id']
    link = get['data']['link']
    if 'video'  in link:
        
      
    elif 'video' not in link:
          

    for i in range(delay,-1,-1):
      for x in['red','blue','yellow','cyan']:
        print(colored("còn "+str(i)+" s ",x),end = '\r')
        sleep(0.25)
    local_time = time.localtime()
    hour = local_time.tm_hour
    minute = local_time.tm_min
    second = local_time.tm_sec
    ht = hoanthanh(idjob,idtt)
    if ht['status'] == 200:
      gia = requests.get(
      'https://gateway.golike.net/api/advertising/publishers/tiktok/logs',
      headers=headers).json()
      t += 1
      tong += gia['data'][0]['prices']
      print(end = ' ')
      print(colored(t,"cyan"),"|",colored(ht['data']['type'],"green"),"|",colored(hour,'yellow')+":"+colored(minute,"yellow")+":"+colored(second,"yellow"),"|","+",colored(gia['data'][0]['prices'],'magenta'),colored("đ","blue"),colored("==>","cyan"),colored(f"tổng: {tong}","yellow"))
    elif ht['status'] >= 400:
      loai = 'follow'
      try:  
        sen = send(idjob,idtt)
        loi = boqua(idjob,oid,idtt,loai)
        print(colored("bỏ qua ","yellow"),end = '\r')
      except:
        print('boqua')
  elif get['success'] == False:
    print(colored("đang tìm jobs","blue"))
    sleep(0)
    
