class StaticPagesController < ApplicationController
  def index
    @post = "ここに扱える言語や何か説明を入れたい"
    @sites = Site.all.order('created_at DESC')
end
end