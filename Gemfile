#bundle exec jekyll serve

source "https://rubygems.org"
ruby RUBY_VERSION

gem 'json'
gem "jekyll", "3.4.3"
gem "minima", "~> 2.0"

# If you have any plugins, put them here!
group :jekyll_plugins do
   gem "jekyll-feed", "~> 0.6"
end

# Windows does not include zoneinfo files, so bundle the tzinfo-data gem
gem 'tzinfo-data', platforms: [:mingw, :mswin, :x64_mingw, :jruby]

require 'json'
require 'open-uri'
versions = JSON.parse(open('https://pages.github.com/versions.json').read)
gem 'github-pages', versions['github-pages']

# jekyll sitemap for seo
gem 'jekyll-sitemap'

# icons
gem 'jekyll-octicons'
