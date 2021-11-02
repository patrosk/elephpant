<img src="https://media4.giphy.com/media/9JVsPnYq2quRy/giphy.gif?cid=ecf05e47jpoj7p3zccy33u8n43nvc80psyn42e3j372u4gta&rid=giphy.gif&ct=g" width="100%">

# Monsters

Monsters is about six monsters from Greek Mythology. It presents their stories and questions what a monster really is. The "Tell me a story" tab generates a random story from Greek Mythology.

Link to the live page: https://patrosk.one/elephpant/index.php

Disclaimer: I do not own any of the images used in the project, except for the key pattern.

# Installation

Install this project by following these steps:

- Clone the repository from this address:

  > https://github.com/patrosk/elephpant

- In the project's root folder, start a php server by typing this in your terminal:

  > php -S localhost:8000

- Open up your browser and paste this URL in the address bar:

  > https://localhost:8000

- If that doesn't work, paste this in the address bar instead:
  > https://localhost:8000/index.php

# Code Review

Code review written by [Amanda Karlsson](https://github.com/amandaprintz).

1. The images of the website are quite big and hard for the eye to grasp. It takes a while for the eye to see the actual image when it’s taking upp full width of the desktop. So I would recommend resizing them to when using a desktop view and maybe even on tablet view. A full width image might be more suitable only for the media query for smartphones when the eye can see the whole image right away.

2. It would be great if alt-tags was added to the pictures of the different monsters in the monsters.php file to describe the images of the different types of monsters. They are very specific in their appearance which make a lot of their characters. That would increase the accessibility on your page because then everyone would be able to know how each monster looks without even physically seeing them.

3. The alt-texts for the images in the “Tell me a story”-page are used to tell the name of each painting. It would be more appropriate to use a <p> for that and instead make an alt-text that actually describes the image rather than giving the name and year of the painting itself. Make sure to keep your alt-text invisible too so it’s not a part of what you see on the page.

4. The story "The curiosity of Pandora" 's subheading needs to be separate to the paragraf text. Now the heading is on the same level as the the actual text of the paragraph in desktop view.

5. In your gallery’s array there is a hover-effect on the images which makes them appear clickable. To make it easier for the visitor of the page maybe the images could be turned into button where you can see each page of each monster right away instead of having a whole new page just for that.

6. Overall I think it looks really nice and interesting. Your coding skills are really great! 🙂

# Testers

Tested by the following people:

1. Agnes Skönvall
2. Sofia Rönnkvist
