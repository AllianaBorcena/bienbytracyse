FROM node:20
WORKDIR /app
COPY package*.json .
RUN npm ci
COPY . ./
ENV PORT=80
CMD ["node", "index.js"]    