import http
import nexmo
from flask import Flask, request, jsonify
from pprint import pprint
import requests

app = Flask(__name__)

@app.route("/webhooks/answer")
def answer_call():
    for param_key, param_value in request.args.items():
        print("{}: {}".format(param_key, param_value))
    
    recording_webhook_url = request.url_root + "webhooks/recording"
    
    ncco = [
        {
            "action": "talk",
            "text": "You've reached Expondent, record your name, location, and emergency after the tone. Press the hash button or hang up when you're finished."
        },
        {
            "action": "record",
            "endOnKey": "#",
            "beepStart": "true",
            "eventUrl": [recording_webhook_url]
        },
        {
            "action": "talk",
            "text": "We've heard you, and we'll be with you shortly."
        }
    ]
    
    return jsonify(ncco)

@app.route("/webhooks/recording", methods=['POST'])
def recording_webhook():

    pprint(request.get_json())

    client = nexmo.Client(
        application_id='55ff83ba-e0cc-4e37-91a7-df0422308128',
        private_key='private.key',
    )
    url = request.get_json()['recording_url']
    response = client.get_recording(url)

    with open(request.get_json()['end_time'] + '.mp3', 'wb') as f:
        f.write(response)

    return ('', http.HTTPStatus.NO_CONTENT)

if __name__ == '__main__':
    app.run(port=3000)