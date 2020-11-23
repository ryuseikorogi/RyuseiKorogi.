Rails.application.routes.draw do
  get '/static_pages/index',to:"static_pages_controller#index"
  get 'static_pages/help'
    root to: "static_pages#index"
end