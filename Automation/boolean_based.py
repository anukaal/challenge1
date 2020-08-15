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

        response_text = get_requestor(payload)
        response_formatting_text = get_request(payload)
        response_formatting_text = text_formatting(response_text)

        if (validator == response_formatting_text[]):
            response = True
            username_length = i
        else:
            response = False
            i = i + 1;

    return username_length
    
