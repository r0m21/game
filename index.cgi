import cognitive_face as CF

print('Content-type: text/html\r\n\r')
KEY = 'a607f67975db4520a7e8a435bbb223d8'
CF.Key.set(KEY)

BASE_URL = 'https://westcentralus.api.cognitive.microsoft.com/face/v1.0'
CF.BaseUrl.set(BASE_URL)

img_url = 'http://scd.mashable.france24.com/sites/default/files/styles/mashable_983x554/public/thumbnails/image/kim-jong-un-coree-nord.jpg?itok=IwmWHmdZ'
faces = CF.face.detect(img_url)
print(faces)