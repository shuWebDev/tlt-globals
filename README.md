# Project Setup

## Pre-Installation
This project utilizes EditorConfig, PHP, NodeJS, and WebPack to ensure a consistent development environment across team member's systems. Some developers may use ```git-flow``` to assist with creating branches and keeping the project clean. If you are unfamiliar with any of these, please use the links below to find out more.

## Project Setup
Please make sure that you have changed directory to your project folder. Once you've changed directories, clone the repository with the following:

```shell
$ git clone https://github.com/shuWebDev/tlt-templates.git # Clones the repository into a directory named "project name".
```

## Getting Started
Now that the project has been cloned, you need to install the required dependencies with ```npm```. Change to the directory where you cloned the project and run:

```shell
$ npm install
```

Once all of the dependencies have been installed, you should be able to have webpack watch for any changes made to the Sass files by running:

```shell
$ npm run watch
```

During development, you can start [a local PHP server on port 8000](http://127.0.0.1:8000 "localhost") with:

```shell
$ npm run start-php
```

### Directory Structures

#### Globals Directory
The ```globals``` directory contains the files that will be included in each project. Here is what you should see:

```shell
globals
├───assets
│   ├───css # Compiled stylesheets
│   ├───images # Global images
│   └───js # Compiled javascripts
├───config # Configuration file(s)
└───templates # Ready to use layouts
    └───parts # Supporting parts to the layouts
```
##### Included Templates
The global templates directory contains all of the layouts that could be used in a given project. Once pages have been created within a project, the layout can easily be changed by requiring one of the templates as the **last line** of the PHP file.

```php
// Include the layout template
require_once(PATH_GLOBAL_TEMPLATE_DIR . '/two-column-layout.tpl');
```

#### Project Directories
Each ```project``` directory should follow a similar structure. However, it is not required. Below is a simple example of a project. All PHP files would be created in the root directory with supporting files in their respective directories.

```shell
_project-example
├───config
├───css
├───images
└───js
```

## References
* [Gitflow Workflow](https://www.atlassian.com/git/tutorials/comparing-workflows/gitflow-workflow)
* [EditorConfig](https://editorconfig.org/)
* [PHP](https://www.php.net/)
* [NodeJS](https://nodejs.org/)
* [MS Visual Studio Code](https://code.visualstudio.com/)
* [WebPack](https://webpack.js.org/)
