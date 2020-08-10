import requests
import re

def find_request(payload):
    response_text = requests.get(payload)
    return response_text