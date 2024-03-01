# DK starter
DK Starter Theme Source

## About

The site is built of Elementor widgets & WordPress Codex. The structure:
```
.
└── app/
    └── theme/                  # Theme files according to WP Template Hierarchy.
        ├── assets/             # CSS & JS folder. 
        ├── lang/               # languages folder.
        └── partials/           # Diverse partials that are included in templates

```
## Installation

#### Requirements
``` 
Docker and Docker Compose
Node 20+
```

#### Install Modules
```
npm install 
```

## Development

#### Start docker
```
docker-compose up -d
```

#### Run in dev mode 
To watch and build it automatically
```
npm run dev
```

## Production
#### Create the production version:
The code will be optimized for production use, saved in `app/theme/public` folder. 
```
npm run build
```
