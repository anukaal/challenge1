import requests
targetURL = "#"
result = requests.get(targetURL)
print result.status_code