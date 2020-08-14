import requests
import re

def find_request(payload):
    response_text = requests.get(payload)
    return response_text

def formatting_text(getting_response_text):
    response_formatting_text = re.sub(r"[\n\t\s]*", "", getting_response_text.text)
    return response_formatting_text

def username_length(payload , validator):
    response = False
    i = 1
    while(response = False):
        payload_list = list(payload)
        payload_list[100] = str(i)
        first_payload = payload_list
        print(first_payload)

        
    
