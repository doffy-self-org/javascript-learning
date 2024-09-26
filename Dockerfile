# specify the node base image with your desired version node:<version>
FROM node:16
# replace this with your application's default port
EXPOSE 8080

# Create app directory
WORKDIR /usr/src/app

# Install app dependencies
# A wildcard is used to ensure both package.json AND package-lock.json are copied
COPY package*.json ./

RUN npm install

# create a folder named public
RUN mkdir public
COPY . .

# copy all the files from the src folder to the public folder
COPY ./src/* ./public/

CMD [ "node", "server.js" ]
 
