# Font-Awesome RetroArch Theme

[RetroArch](https://www.libretro.com/index.php/retroarch-2/) custom theme that incorporates [Font-Awesome](http://fontawesome.io/) icons into Monochrome.

## Install

1. [Download the theme](https://github.com/RobLoach/retroarch-theme-fontawesome/archive/master.zip)
2. Place the files in the `assets/xmb/custom` folder
3. In the menu, select the *Custom* theme
4. Quit and re-launch RetroArch

## Development

- The [Font-Awesome Cheatsheet](http://fontawesome.io/cheatsheet/) is good to see an overview
- See [`icons.yml`](src/icons.yml) for the Font-Awesome icon mappings

### Build

1. Install requirements

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

## Attribution

- Font Awesome by Dave Gandy - http://fontawesome.io
- RetroArch theme adaption by [Rob Loach](http://robloach.net)
