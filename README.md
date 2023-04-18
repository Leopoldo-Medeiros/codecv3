# Code CV Laravel + Nuxt

## Prerequisites

- Lando 3 or higher

## Development

### Installation

1. Clone this repository: `git clone git@github.com/Leopoldo-Medeiros/codecv3.git`
2. Navigate to the cloned repository: `cd codecv3`
3. Navigate to the cloned repository: `git checkout nuxt3`
4. Start Lando: `lando start`
5. Install composer and npm dependencies, and copy `.env` to root of the project files: `lando install`
6. Run `lando install`

### Running the Application

1. Start the Nuxt server for HMR:

```bash
lando info
lando nuxt
```

* This will:
    * This will display the URL where you can access your Nuxt app.
    * Update the `BASE_URL` with the Nuxt URL.
    * Start the Nuxt dev server inside the node container.


* If you need to view the Nuxt URL again you may run:

```bash
lando nuxt-url
```

* Sometimes, for some reason, the lando/cache folder doesn't exist inside the appserver and gives an error when trying to get the current project URL, so, if happens, just:

```bash
lando info
```

* After that, you can run normally the other commands

### Seed user and password

```bash
user: admin@codecv.com
pass: CodeCVPass123
```
