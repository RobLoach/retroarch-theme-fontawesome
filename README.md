# Font-Awesome RetroArch Theme

[RetroArch](https://www.libretro.com/index.php/retroarch-2/) custom theme that incorporates [Font-Awesome](http://fontawesome.io/) icons into Monochrome.

## Usage

1. Download the theme
2. Place the files in the `assets/xmb/custom` folder
3. In the menu, select the *Custom* theme
4. Quit and re-launch RetroArch

## Build

1. Project requirements

  - PHP >= 5.6
  - [Composer](https://getcomposer.org)

2. Install dependencies
  ```
  composer install
  ```

3. Build the theme
  ```
  composer test
  ```

## Development

- See [icons.yml](src/icons.yml) for the icon mappings
- An overview of the icons can be found in the [Font Awesome Cheatsheet](http://fontawesome.io/cheatsheet/)

## Attribution

- Font Awesome by Dave Gandy - http://fontawesome.io
- RetroArch theme adaption by [Rob Loach](http://robloach.net)
