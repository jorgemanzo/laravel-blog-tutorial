use blog;
CREATE USER 'remote'@'%' IDENTIFIED BY 'deadbeef';
GRANT ALL ON *.* to 'remote'@'%';